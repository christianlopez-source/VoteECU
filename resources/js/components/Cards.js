import React, { Component } from "react";
import ReactDOM from "react-dom";

const baseUrl = "http://voteecu.test/";

export class Cards extends Component {
    constructor(props) {
        super(props);
        this.state = {
            candidatos: []
        };
    }

    componentDidMount() {
        axios
            .get(baseUrl + "api/candidatos")
            .then(response => {
                this.setState({ candidatos: response.data });
            })
            .catch(error => {
                alert("Error " + error);
            });
    }

    render() {
        return this.state.candidatos.map((data, index) => {
            return (
                // <div key={index}>
                //     <p className="mt-2 font-sans font-light text-grey-dark">
                //         {data.nombre}
                //     </p>
                // </div>
                <div
                    key={index}
                    className="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3 ml-8"
                >
                    <img
                        src="https://i.imgur.com/dYcYQ7E.png"
                        className="w-full"
                    />

                    <div className=" flex justify-center -mt-8">
                        <img
                            style={{ width: "50%" }}
                            src={data.imagen}
                            className="bg-contain bg-center rounded-full border-solid border-white border-2 -mt-3"
                        />
                    </div>
                    <div className="text-center px-3 pb-6 pt-2">
                        <h3 className="text-black text-sm bold font-sans"></h3>
                        <p className="mt-2 font-sans font-light text-grey-dark">
                            {data.nombre}
                        </p>
                    </div>
                    <div className="flex justify-center pb-3 text-grey-dark">
                        <div className="text-center mr-3 border-r pr-3">
                            <h2>{data.edad}</h2>
                            <span>Votos</span>
                        </div>
                        <div className="text-center mr-3 border-r pr-3">
                            <button className="bg-blue-500 active:bg-blue-700">
                                Votar
                            </button>
                        </div>
                    </div>
                </div>
            );
        });
    }
}

export default Cards;

if (document.getElementById("cartas")) {
    ReactDOM.render(<Cards />, document.getElementById("cartas"));
}
