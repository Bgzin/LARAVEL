import mongoose, { mongo } from "mongoose";

const UserSchema = new mongoose.Schema({
    usermame: {
        type: String,
        required: true,
        unique: true
    },
    password: {
        type: String,
        required: true
    },
});

const User =  mongoose.models.User || mongoose.model ('User', UserSchema)

export default User;