import React from "react";
import ReactDOM from "react-dom";
import axios from "axios";

function FollowButton(props) {
    const clickHandler = async () => {
        const res = await axios.post("/follow/" + props.userid);
        console.log(res.data);
    };
    return (
        <div>
            <button className="btn btn-primary ml-4" onClick={clickHandler}>
                Follow
            </button>
        </div>
    );
}

export default FollowButton;

if (document.getElementById("react-button")) {
    const element = document.getElementById("react-button");
    const props = Object.assign({}, element.dataset);
    ReactDOM.render(<FollowButton {...props} />, element);
}
