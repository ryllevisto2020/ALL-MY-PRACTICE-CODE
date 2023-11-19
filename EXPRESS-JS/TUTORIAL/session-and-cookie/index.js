const express = require('express');
const cors = require('cors');
var cookieParser = require('cookie-parser')
const app = express();

app.use(cors({
    credentials:true,
    origin:true,
}));
app.use(cookieParser());

app.get('/session',(req,res)=>{
    console.log(req.headers.cookies);
    res.set({
        'Access-Control-Expose-Headers': 'token-auth',
        'Content-Type': 'application/json',
        'Content-Length': '1',
        'token-auth': '12345-qwe'
      })
    res.send("success");
})

app.listen(3080,()=>{
    console.log("running on port 3080");
})