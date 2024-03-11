import express from 'express';
const app = express();
const port = 3000;
import url from "url";
import router from "./routes/index.js";

const __dirname = url.fileURLToPath(new URL(".", import.meta.url));

app.get('/', (req, res) => {
    res.sendFile("./index.html", { root: __dirname });
});

app.use(router);

app.use('/', (req, res) => {
    res.status(404);
    res.send("Page Not Found 404");
});

app.listen(port, () =>{
    console.log(`Example app listening at http://localhost:${port}`);
});