import Comp1 from '../src/Creating and nesting components/Sample.js'
import Comp2 from '../src/Displaying data/Sample.js'
import Comp3 from '../src/Rendering lists/Sample.js'
import Comp4 from '../src/Responding to events/Sample.js'
import Comp5 from '../src/Updating the screen/Sample.js'
import Comp6 from '../src/Using Hooks/Sample.js'

export default function App() {
  return (
    <div className="App">
    <script src="http://localhost:8097"></script>
      <div>
        {/*Creating and nesting components*/}
        <Comp1/>
        <br></br>
        {/*Displaying Data*/}
        <Comp2/>
        <br></br>
        {/*Rendering lists*/}
        <Comp3/>
        <br></br>
        {/*Responding to events*/}
        <Comp4/>
        <br></br>
        {/*Updating the screen*/}
        <Comp5/>
        <br></br>
        {/*Using Hooks*/}
        <Comp6/>
      </div>
    </div>
  );
}
