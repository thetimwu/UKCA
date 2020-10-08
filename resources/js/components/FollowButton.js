import React, { useState, useEffect } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

function FollowButton(props) {
    const [follow, setFollow] = useState(false);

    useEffect(() => {
        setFollow(props.follows);
    }, []);

    const clickHandler = async () => {
        try {
            const res = await axios.post("/follow/" + props.userid);
            setFollow(!follow);
            console.log(res.data);
        } catch (err) {
            if (err.response.status == 401) {
                window.location = "/login";
            }
            console.log(err);
        }
    };
    return (
        <div>
            <button className="btn btn-primary ml-4" onClick={clickHandler}>
                {follow ? "Follow" : "Unfollow"}
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
