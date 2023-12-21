import { useEffect, useRef } from "react";
import { Link } from "react-router-dom";

function Login() {
  const checkBox = useRef();
  const name = useRef();
  const password = useRef();
  const confirmPassword = useRef();
  const email = useRef();
  //const files = useRef(HTMLInputElement);

  function validateData(name_, email_, password_, confirmPassword_) {
    let error_arr = [];
    if(!name_ || !email_ || !password_ || !confirmPassword_){
      if(!name_){
        error_arr.push({error_code:"0x1_name",error_message:"Invalid Name!",reference:name});
      }else{name.current.style.borderColor="black"}
      if(!email_){
        error_arr.push({error_code:"0x1_email",error_message:"Invalid Email!",reference:email});
      }else{email.current.style.borderColor="black"}
      if(!password_){
        error_arr.push({error_code:"0x1_password",error_message:"Invalid Password!",reference:password});
      }else{password.current.style.borderColor="black"}
      if(!confirmPassword_){
        error_arr.push({error_code:"0x1_confirmPassword",error_message:"Invalid Confirm Password!",reference:confirmPassword});
      }else{confirmPassword.current.style.borderColor="black"}
      if(error_arr.length>0){
        for(let i=0;i < error_arr.length;i++){
          var get_reference = error_arr[i].reference;
          console.log(get_reference.current.style.borderColor="red",alert(error_arr[i].error_message));
        }
      }
    }else{
      name.current.style.borderColor="black"
      email.current.style.borderColor="black"
      password.current.style.borderColor="black"
      confirmPassword.current.style.borderColor="black" 
      if(password_==confirmPassword_){
        const checkBox_checked = checkBox.current.checked;
        if (checkBox_checked) {
          const data = {
            name:name_,
            password:password_,
            email:email_
          }
          fetch('http://localhost:3030/account/register', {
            method: 'POST',
            headers: {
              "content-type": 'application/json',
            },
            body: JSON.stringify(data),
          }).then(async function (response) {
            let data_response =await response.json();
            console.log(data_response);
          });
          console.log("http request");
        }else{
          console.log(alert("Click agree all statements in Terms of service"));
        }
      }else{
        error_arr.push({error_code:"0x1_notMatch",error_message:"Password not Match!"});
        console.log(alert(error_arr[0].error_message));
      }
    }
  }

  async function action_register() {
    //console.log(files.current.files[0]);
    //let form = new FormData();
    //form.append('file', files.current.files[0]);
    //console.log(form);  
      //Call function validateData
      validateData(name.current.value, email.current.value, password.current.value, confirmPassword.current.value);
  }

  return (
    <>
      <section class="vh-100 bg-image"
        style={{ backgroundImage: 'url(https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp)' }}>
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style={{ borderRadius: "15px" }}>
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <form>
                    
                      <div class="form-outline mb-4">
                        <input ref={name} type="text" id="form3Example1cg" className="0x1_name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1cg">Your Name</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input ref={email} type="email" id="form3Example3cg" class="input_email form-control form-control-lg" />
                        <label class="form-label" for="form3Example3cg">Your Email</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input ref={password} type="password" id="form3Example4cg" class="input_pass form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cg">Password</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input ref={confirmPassword} type="password" id="form3Example4cdg" class="input_confirmPass form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                      </div>

                      <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" ref={checkBox} />
                        <label class="form-check-label" for="form2Example3g">
                          I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                        </label>
                      </div>

                      <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-light btn-lg px-5" type="button" style={{ color: "black", borderColor: "black" }} onClick={action_register}>Sign Up</button>
                      </div>

                      <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                        class="fw-bold text-body"><u><Link to="/login">Login here</Link></u></a></p>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}

export default Login;