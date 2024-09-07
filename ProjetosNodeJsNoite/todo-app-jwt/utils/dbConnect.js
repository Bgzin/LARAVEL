import mongoose from "mongoose";

const DATABASE_URL = process.env.DATABASE_URL;  //database é a mesma fita

 //verifição
 if (!DATABASE_URL) {
    throw new Error(
        'Por Favor, defina a variavel DATABASE_URL no arquivo .env.local'
    );
 }

 const connectMongo =  async() => {
     mongoose.connect(DATABASE_URL)
        .then("Conectado com Mongo")
        .catch(err=>console.error(err));
 }

 export default connectMongo;