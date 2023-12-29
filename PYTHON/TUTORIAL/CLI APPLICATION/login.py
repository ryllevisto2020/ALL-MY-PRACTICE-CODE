class login():
    def credentials(self,_username,_password):
        self.username = _username
        self.password = _password
    def validate(self):
        if self.username == "admin" and self.password == "admin":
            return True
        else:
            return False

class post():
    def write_post(self,_post):
        self.post = _post
    def save_post(self):
        from pathlib import Path
        p = Path("admin.txt")
        if p.exists():
            p.open("w").write(self.post)
        else:
            p.open("w+").write(self.post)
    def read_post(self):
        from pathlib import Path
        p = Path("admin.txt")
        return p.open().read()
def main():
    _login = login()
    input_username = input("Please enter your username: ")
    input_password = input("Please enter your password: ")
    _login.credentials(input_username, input_password)
    status : bool = _login.validate()
    if status == True:
        print("Login successful")
        _post = post()
        input_post = input("Write your post: ")
        _post.write_post(input_post)
        _post.save_post()
        
        print("This is your post: "+_post.read_post())
    else:
        print("login failed")
if __name__ == "__main__":
    main()