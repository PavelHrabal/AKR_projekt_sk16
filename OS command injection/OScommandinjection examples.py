import os
import subprocess

def execute_os_command():
    command = input("Zadejte příkaz: ")
    os.system(command)

def execute_subprocess_command():
    command = input("Zadejte příkaz pro subprocess: ")
    subprocess.run(command, shell=True)

def echo_user_input():
    user_input = input("Zadejte parameter: ")
    command = f"echo Tisk {user_input}"
    os.system(command)

def evaluate_python_expression():
    user_input = input("Enter a Python expression to evaluate: ")
    try:
        result = eval(user_input)
        print(f"Výsledek:\n{result}", flush=True)
    except Exception as e:
        print(f"Error:\n{e}", flush=True)

def main():
    while True:
        print("\nVyberte možnost:", flush=True)
        print("1 - os.system", flush=True)
        print("2 - subprocess.run", flush=True)
        print("3 - Echo user input using os.system", flush=True)
        print("4 - Evaluate a Python expression with eval()", flush=True)
        print("5 - Exit", flush=True)

        choice = input("Vyberte možnost(1-5): ")

        if choice == '1':
            execute_os_command()
        elif choice == '2':
            execute_subprocess_command()
        elif choice == '3':
            echo_user_input()
        elif choice == '4':
            evaluate_python_expression()
        elif choice == '5':
            print("Konec programu.", flush=True)
            break
        else:
            print("Neplatná volba: 1-5.", flush=True)

if __name__ == "__main__":
    main()
