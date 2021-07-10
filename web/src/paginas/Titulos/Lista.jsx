import React from 'react';
import axios from 'axios';

export default function Lista() {

    const teste = () => {
        axios.post('https://bancodehqs.com.br/backend/teste.php')
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })
    }
    return (
        <div>
            
        </div>
    )
}
