import mongoose from "mongoose";


const TaskSchema = new mongoose.Schema({
    userID:{
        type: mongoose.Schema.Types.ObjectId,
        ref: 'User',
        required: true
    },
     title: {
        type: String,
        required: true
     },
     completed: {
        type: Boolean,
        default: false
        
     }
});

const Task = mongoose.models.User || mongoose.model ('Task', TaskSchema);


export default Task;