import express from 'express';
const barangRouter = express.Router();


barangRouter
    .route('/')
    .get((req, res) => {
        res.send("Metode Get barang");
    })
    .post((req, res) => {
        res.send("Metode post barang");
    })
barangRouter
    .route('/:id')
    .get((req, res) => {
        res.send("Metode Get barang dengan id" + req.params.id);
    })
    .put( (req, res) => {
        res.send("Metode put barang dengan id" + req.params.id);
    })
    .post( (req, res) => {
        res.send("Metode post barang dengan id" + req.params.id);
    })
    .delete( (req, res) => {
        res.send("Metode delete barang dengan id" + req.params.id);
    });

export default barangRouter;