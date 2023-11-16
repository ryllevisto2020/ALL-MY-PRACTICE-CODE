import { useEffect, useRef, useState } from "react";
import Axios from 'axios';

function ViewComponents() {
  let [data_fetch,setDataFetch] = useState();

  let data = {
    id: 4,
    name: "visto",
    location: "manila"  
}
  let add =()=>{
    Axios.post("http://localhost:8080/users",data)
    .then(function(res){
      console.log(res);
    });
  }

  let dataa;
  fetch();
  function fetch(){
    Axios.get("http://localhost:8080/users")
    .then(function(res){
      setDataFetch(res.data);
    })
  }  
  
  function a(){
    console.log(data_fetch);
  }
    return (
      <>
      <h1>This is components</h1>
      <button onClick={add}>add</button>
      <button onClick={a}>fetch</button>
      {
        
      }
      </>
    );
  }

export default ViewComponents;