import { createApp } from "vue";
import App from "./App.vue";

// createApp(App).mount("#app");
// // console.log("hello app")
// console.log("hello");

// var app = createApp({
//   data() {
//     return {
//       message: "This data form mainJs",
//     };
//   },
//   render() {
//     return "Hello World";
//   },
// });
var app = createApp(App);

app.mount("#app");
