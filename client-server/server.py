import socket  

# Define the threshold value  
THRESHOLD = 45

def handle_client(client_socket):  
    # Receive data from the client  
    data = client_socket.recv(1024)  
    data = data.decode('utf-8')  

    # Convert the data to a float  
    try:  
        value = float(data)  
    except ValueError:  
        client_socket.sendall(b"Invalid data")  
        return  

    # Generate a result based on the client's data and the threshold  
    if value > THRESHOLD:  
        result = "Above threshold"  
    elif value < THRESHOLD:  
        result = "Below threshold"  
    else:  
        result = "Equal to threshold"  

    # Send the result back to the client  
    client_socket.sendall(result.encode('utf-8'))  

def main():  
    # Create a socket object  
    server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  

    # Bind the socket to a address and port  
    server_socket.bind(('127.0.0.1', 8080))  # Use 127.0.0.1 and port 8080  

    # Listen for incoming connections  
    server_socket.listen(1)  

    print("Server is listening...")  

    while True:  
        # Accept an incoming connection  
        client_socket, address = server_socket.accept()  

        print(f"Connection from {address}")  

        # Handle the client  
        handle_client(client_socket)  

        # Close the client socket  
        client_socket.close()  

if __name__ == "__main__":  
    main()
    
    
    
  #client using socket
  import socket  

def main():  
    # Create a socket object  
    client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  

    # Connect to the server  
    client_socket.connect(('127.0.0.1', 8080))  # Use 127.0.0.1 and port 8080  

    # Send data to the server  
    data = input("Enter a value: ")  
    client_socket.sendall(data.encode('utf-8'))  

    # Receive the result from the server  
    result = client_socket.recv(1024)  
    result = result.decode('utf-8')  

    print(f"Result: {result}")  

    # Close the client socket  
    client_socket.close()  

if __name__ == "__main__":  
    main()