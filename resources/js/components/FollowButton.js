import React from "react";
import ReactDOM from "react-dom";
import axios from "axios";

function FollowButton(props) {
    const clickHandler = async () => {
        try {
            const res = await axios.post("/follow/" + props.userid);
            console.log(res.data);
        } catch (err) {
            if (err.data.status == 401) {
                window.location = "/login";
            }
            console.log(err);
        }
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
