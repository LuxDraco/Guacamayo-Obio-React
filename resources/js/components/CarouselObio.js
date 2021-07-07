import React, {useState} from "react";
import ReactDOM from 'react-dom';
import Carousel, { slidesToShowPlugin, autoplayPlugin  } from '@brainhubeu/react-carousel';
import '@brainhubeu/react-carousel/lib/style.css';
import {IconButton, Paper, Tooltip, Typography} from "@material-ui/core";
import '../../css/carousel.css';
import {Launch} from "@material-ui/icons";

export default function CarouselObio(props)
{
    const [imgs] = useState(props.listImgsProp)

    return(
        <div>
            <Carousel
                plugins={[
                    'centered',
                    'infinite',
                    'arrows',
                    'clickToChange',
                    {
                        resolve: slidesToShowPlugin,
                        options: {
                            numberOfSlides: 5,
                        },
                    },
                    {
                        resolve: autoplayPlugin,
                        options: {
                            interval: 3000,
                        }
                    }
                ]}
                animationSpeed={1000}
                breakpoints={{
                    640: {
                        plugins: [
                            'centered',
                            'infinite',
                            'fastSwipe',
                            {
                                resolve: slidesToShowPlugin,
                                options: {
                                    numberOfSlides: 1
                                }
                            },
                            {
                                resolve: autoplayPlugin,
                                options: {
                                    interval: 3000,
                                }
                            }
                        ]
                    },
                    1300: {
                        plugins: [
                            'centered',
                            'infinite',
                            'fastSwipe',
                            'clickToChange',
                            {
                                resolve: slidesToShowPlugin,
                                options: {
                                    numberOfSlides: 2
                                }
                            },
                            {
                                resolve: autoplayPlugin,
                                options: {
                                    interval: 3000,
                                }
                            }
                        ]
                    },
                    1800: {
                        plugins: [
                            'centered',
                            'infinite',
                            'fastSwipe',
                            'clickToChange',
                            {
                                resolve: slidesToShowPlugin,
                                options: {
                                    numberOfSlides: 3
                                }
                            },
                            {
                                resolve: autoplayPlugin,
                                options: {
                                    interval: 300000,
                                }
                            }
                        ]
                    },
                }}
            >
                {
                    imgs.map((item, idx) => {
                        return(
                            <Paper
                                key={item + '-' + idx}
                                elevation={3}
                                square
                                className="d-flex flex-column justify-content-center align-items-center position-relative"
                            >
                                <img
                                    src={item['img']}
                                    alt={''}
                                    style={{
                                        objectFit: "cover",
                                    }}
                                />

                                <div
                                    className="position-relative w-100 d-flex flex-column justify-content-center align-items-center"
                                >
                                    <Typography variant={"h5"} className="font-weight-bold">
                                        {item['name']}
                                    </Typography>

                                    <Typography variant={"body1"}>
                                        {'$ ' + item['price']}
                                    </Typography>

                                    <Tooltip title={'Abrir detalles'}>
                                        <IconButton
                                            className="position-absolute"
                                            style={{
                                                right: 0,
                                                top: 0,
                                                bottom: 0,
                                            }}
                                            onClick={() => {
                                                window.open('/details/' + item['id'], '_self');
                                            }}
                                        >
                                            <Launch />
                                        </IconButton>
                                    </Tooltip>
                                </div>


                            </Paper>
                        )
                    })
                }
            </Carousel>
        </div>
    )
}
