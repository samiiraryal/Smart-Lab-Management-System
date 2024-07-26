import GPUtil

def check_gpu():
    gpus = GPUtil.getGPUs()
    if gpus:
        print(f"GPUs available: {len(gpus)}")
    else:
        print("No GPUs found")

if __name__ == "__main__":
    check_gpu()
