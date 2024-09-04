import mongoose from "mongoose";

const TodoSchema = new mongoose.Schema({


    title:{
        type:String,
        required:true
    },
    description:{
        type:String
    },
    completed:{
        type:Enum('A Fazer','Fazendp','Concluido'),
        default:'A Fazer'
    }
});

const Todo = mongoose.models.todo || mongoose.model('Todo',TodoSchema);

export default todo;



