import bootstrap from 'bootstrap'
import Registration from './components/registration.js';
import Home from './components/home.js';
import Login from './components/login.js';
import { BrowserRouter,Routes,Route } from 'react-router-dom';
function App() {
  return (
    <BrowserRouter>
    <Routes>
      <Route exact path='/' element={<Home/>}/>
      <Route path='/Registration' element={<Registration/>}/>
      <Route path='/Login' element={<Login/>}/>
    </Routes>
    </BrowserRouter>
  );
}

export default App;
