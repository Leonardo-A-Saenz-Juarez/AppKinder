const http = require("node:http");
const fs = require("node:fs");
const puerto = 3000;

var archivo_usuario = JSON.parse(fs.readFileSync("./usuario.json").toString());

const server = http.createServer((request, response) => {

    response.setHeader("Access-Control-Allow-Origin", "*");
    response.setHeader("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE");

    switch(request.method){
        case "GET":
            if(request.url == "/usuarios"){
                response.writeHead(200, { "Content-Type": "application/json" });
                response.end(JSON.stringify(archivo_usuario));
            }
            else {
                response.writeHead(404, { "Content-Type": "application/json" });
                response.end(JSON.stringify({ error: "Ruta no encontrada" }));
            }
        break;
        case "POST":
        break;
        case "PUT":
        break;
        case "DELETE":
        break;
        case "OPTIONS":
            response.writeHead(204);
            response.end();
        break;
    }
});

server.listen(puerto, () => {
    console.log("Servidor a la escucha en el puerto http://localhost:" + puerto);
});