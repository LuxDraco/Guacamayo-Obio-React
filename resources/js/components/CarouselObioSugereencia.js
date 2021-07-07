import React, {useEffect, useState} from "react";
import ReactDOM from 'react-dom';
import CarouselObio from "./CarouselObio";
import axios from "axios";
import {red} from "@material-ui/core/colors";

function CarouselObioSugerencia()
{
    const [imgs] = useState([
        {
            'name': 'Producto 1',
            'price': '99.90',
            'img': 'https://image.freepik.com/free-photo/top-view-chocolate-bars_23-2148173340.jpg',
        },
        {
            'name': 'Producto 2',
            'price': '99.90',
            'img': 'https://img.freepik.com/free-photo/top-view-delicious-hazelnut-chocolate_23-2148701907.jpg?size=338&ext=jpg',
        },
        {
            'name': 'Producto 3',
            'price': '99.90',
            'img': 'https://image.freepik.com/free-photo/close-up-box-with-vegetables-hands-mature-man_329181-4600.jpg'
        },
    ])

    const [recomendaciones, setRecomendaciones] = useState(null);

    useEffect(() => {
        axios.get('http://127.0.0.1:5000/predicciones/1')
            .then(res => {
                console.log(res)
            })
    })

    return(
        <CarouselObio
            listImgsProp={imgs}
        />
    )
}

export default CarouselObioSugerencia;

if (document.getElementById('carousel-react-sugerencia')) {
    ReactDOM.render(<CarouselObioSugerencia />, document.getElementById('carousel-react-sugerencia'));
}
