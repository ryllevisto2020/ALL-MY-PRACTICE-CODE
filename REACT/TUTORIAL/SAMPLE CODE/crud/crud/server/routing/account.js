const express = require('express');
const mysql = require('mysql');
const app = express();




const router = express.Router();

router.post('/register', (req, res) => {
    var pool  = mysql.createPool({
        connectionLimit : 10,
        host            : 'localhost',
        user            : 'root',
        password        : '',
        database        : 'react'
    });
    pool.getConnection(function (err, connection) {
        var data = req.body;
        console.log(data);
        connection.query("INSERT INTO `crud` (`crud_id`, `crud_name`, `crud_email`, `crud_pass`) VALUES (NULL, '"+data.name+"', '"+data.email+"', '"+data.password+"')",
        function(err){
            if(err==null) {
                
            }else{
                console.log(err);
            }
        });
    });
    
    res.json("awd");
});

module.exports = router;