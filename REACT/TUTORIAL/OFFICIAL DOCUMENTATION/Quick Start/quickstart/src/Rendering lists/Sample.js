const products = [
    {
        name:'lettuce',
        id:1
    },
    {
        name:'Eggplant',
        id:2
    }
];

export default function App(){
    return (
        <div>
            <h1>Rendering Lists</h1>
            {products.map((x)=>
                <h2>Product Name:{x.name} and Product ID:{x.id}</h2>
            )}
        </div>
    )
}