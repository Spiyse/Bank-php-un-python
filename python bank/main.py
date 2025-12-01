class BankAccount:
    def __init__(self, owner: str, balance: float):
        self.owner = owner
        self.balance = float(balance)

    def deposit(self, amount: float):
        if amount <= 0:
            print(f"depozītam jābūt pozitīvam {self.owner}.")
            return
        self.balance += amount
        print(f"Ielikts {amount} $ iekšā {self.owner} kontā.")

    def withdraw(self, amount: float):
        if amount <= 0:
            print(f"Summai jābūt pozitīvai {self.owner}.")
            return
        if amount > self.balance:
            print(f"Nepietiekami līdzekļi {self.owner}.")
            return
        self.balance -= amount
        print(f"Izņemts {amount} no {self.owner}.")

    def print_info(self):
        balance_formatted = f"{self.balance:,.2f}"
        print(f"Owner: {self.owner} | Balance: {balance_formatted}.")



print("gucci")
krigerts = BankAccount("Krigerts", 66)
niks = BankAccount("Niks", 1)

krigerts.deposit(1)
niks.deposit(1)

krigerts.print_info()
niks.print_info()