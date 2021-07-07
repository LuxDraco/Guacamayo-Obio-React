import React, {useEffect, useState} from "react";
import ReactDOM from 'react-dom';
import CarouselObio from "./CarouselObio";
import axios from "axios";
import {CircularProgress, Typography} from "@material-ui/core";

function CarouselObioLoMasVendido()
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
    ]);

    const [products, setProducts] = useState(null);
    const [productsValid, setProductsValid] = useState(false);

    useEffect(() => {
        axios.get('/products')
            .then(res => {
                setProducts(JSON.parse(JSON.stringify(res.data)));
                setProductsValid(true);
            })
            .catch(err => {
                setProductsValid(false);
            })
    }, []);

    if (productsValid) {
        return(
            <CarouselObio
                listImgsProp={products}
            />
        )
    } else {
        return (
            <div className="d-flex flex-column justify-content-center align-items-center w-100">
                <CircularProgress />
                <Typography variant="h4">
                    Cargando datos, por favor espere...
                </Typography>
            </div>
        )
    }
}

export default CarouselObioLoMasVendido;

if (document.getElementById('carousel-react-mas-vendido')) {
    ReactDOM.render(<CarouselObioLoMasVendido />, document.getElementById('carousel-react-mas-vendido'));
}
