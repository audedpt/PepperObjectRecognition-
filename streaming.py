import cv2
import os
import zmq
import base64

context = zmq.Context()
footage_socket = context.socket(zmq.PUB)
footage_socket.connect('tcp://localhost:5555')

# init the camera
camera = cv2.VideoCapture(0)

while True:
    try:
        (grabbed, frame) = camera.read()            # grab the current frame
        frame = cv2.resize(frame, (640, 480)) 
        frame = base64.b64encode(frame)      # resize the frame
        footage_socket.send_string(frame)

        # Show the video in a window
        cv2.imshow("Frame", frame)                  # show the frame to our screen
        cv2.waitKey(1)                              # Display it at least one ms
        #                                           # before going to the next frame

    except KeyboardInterrupt:
        camera.release()
        cv2.destroyAllWindows()
        print ("\n\nBye bye\n")
        break