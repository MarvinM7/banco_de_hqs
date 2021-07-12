import { combineReducers } from "redux";

import geral from "./geral.jsx";
import usuario from "./usuario.jsx";

const rootReducer = combineReducers({
    usuario,
    geral
});

export default rootReducer;
