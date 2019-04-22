import cv2
import zmq
import base64
import numpy as np

context = zmq.Context()
footage_socket = context.socket(zmq.SUB)
footage_socket.bind('tcp://*:5555')
footage_socket.setsockopt_string(zmq.SUBSCRIBE, unicode(''))

# camera = cv2.VideoCapture("output.avi")

while True:
    try:
        frame = footage_socket.recv_string()
        frame = np.fromstring(base64.b64decode(frame), dtype=np.uint8)
        cv2.imshow("Frame", frame)                  # show the frame to our screen
        cv2.waitKey(1)                              # Display it at least one ms
        #                                           # before going to the next frame
    except KeyboardInterrupt:
        cv2.destroyAllWindows()
        break

print ("\n\nBye bye\n")