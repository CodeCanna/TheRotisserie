import React from 'react';
import UI from './UI';

var style = {
    textAlign: "center",
    padding: "20px",
    position: "fixed",
    left: "0",
    bottom: "0",
    height: "60px",
    width: "100%",
}

var phantom = {
    display: 'block',
    padding: '20px',
    height: '60px',
    width: '100%',
}

function Footer(props) {
    console.log(props.url)
    return (
        <div className="bg-light">
            <div style={phantom} />
            <div style={style}>
                <UI />
            </div>
        </div>
    )
}

export default Footer;