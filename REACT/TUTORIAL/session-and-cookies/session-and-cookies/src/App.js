import Cookies from 'js-cookie';
import { useEffect , useRouter, useState} from 'react';
let count = 0;
function App() {
  let [arr,setArr] = useState([]);
  
  let add = () =>{
    setArr([...arr,count=count+1])
  }

  let set_cookie = (event) =>{
    event.preventDefault();
    Cookies.set("name","vistoawd");
    window.location.reload();
  }

  let delete_cookie = () =>{
    Cookies.remove('name');
    
  }

  let get_cookie = () =>{
    return Cookies.get('name');
  }
  console.log(get_cookie());

  useEffect(()=>{
    
  },[])
  
  return (
    <div className="App">
      <header className="App-header">
        <button onClick={(e)=>{set_cookie(e)}}>set cookie</button>
        <button onClick={delete_cookie}>delete cookie</button>
        <button onClick={add}>add</button>
        { 
        arr.map((x)=>(<h1>{x}</h1>))
        }
        <input type="text" placeholder='cookie' defaultValue={get_cookie()}></input>
      </header>
    </div>
  );
}

export default App;
