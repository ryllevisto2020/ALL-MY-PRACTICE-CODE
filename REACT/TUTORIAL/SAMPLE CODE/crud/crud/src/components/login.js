import { useLayoutEffect, useRef } from "react";
import { Link } from "react-router-dom";

function Login() {
    const background_ref = useRef(null);
    const test = () => {
        console.log(background_ref);
    }
    useLayoutEffect(() => {
        background_ref.current.style.setProperty('border-radius', '1rem');
        background_ref.current.style.setProperty('background-color', '#fff','important');
    },[]);
    return (
        <>
            <section class="vh-100 gradient-custom" style={{ backgroundImage: 'url(https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp)' }}>
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" ref={background_ref}>
                                <div class="card-body p-5 text-center">

                                    <div class="mb-md-5 mt-md-4 pb-5">

                                        <h2 class="fw-bold mb-2 text-uppercase" style={{ color:"black" }}>Login</h2>
                                        <p class="text-black-50 mb-5"  style={{ color:"black" }}>Please enter your login and password!</p>

                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                            <label class="form-label" for="typeEmailX"  style={{ color:"black" }}>Email</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                            <label class="form-label" for="typePasswordX"  style={{ color:"black" }}>Password</label>
                                        </div>

                                        <p class="small mb-5 pb-lg-2" ><a class="text-black-50" href="#!">Forgot password?</a></p>

                                        <button class="btn btn-outline-light btn-lg px-5" type="submit"  style={{ color:"black",borderColor:"black"}}>Login</button>

                                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                            <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                        </div>

                                    </div>

                                    <div>
                                        <p class="mb-0"  style={{ color:"black" }}>Don't have an account? <a href="#!" class="text-black-50 fw-bold" ><Link to="/Registration">Sign Up</Link></a>
                                        </p>
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