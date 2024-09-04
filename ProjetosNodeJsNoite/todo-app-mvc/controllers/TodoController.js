import todo from "@/models/Todo";
import connectMongo from "@/utils/dbConnect";

//criar o CRUD

//Read

export const getTodos = async() =>{
    await connectMongo;
    try{
        return await todo.find();
    }catch (error){
       console.error(error);
    }
}

//Create

export const createTodo = async(data)=>{
    await connectMongo;
    try {
        return await todo.create(data)
    } catch (error) {
        console.error(error);
    }
}


//update

export const updateTodo = async(id, data) =>{
    await connectMongo;
    return await todo.findByIdAndUpdate(id, data,{
        new: true,
        runValidators: true,
    });
}

//delete


export const deleteTodo = async(id) =>{
    await connectMongo();
    return await todo.deleteOne({_id: id});
}