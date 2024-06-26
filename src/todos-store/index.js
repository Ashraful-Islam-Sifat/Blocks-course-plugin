import { createReduxStore, register } from "@wordpress/data";
import reducer from "./reducer";;
import * as selectors from "./selectors";
import * as actions from "./actions";
import * as resolvers from "./resovers"
import controls from "./controls";

const store = createReduxStore('block-course/todos', {
  reducer,
  selectors,
  actions,
  resolvers,
  controls
});

register(store);