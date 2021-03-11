export default {
    ADD_ALL_USERS(state, users) {
        state.items = users;
    },
    ADD_ONLINE_USERS(state, users){
        state.online = users;
    },
    ADD_ONLINE_USER(state, user){
        state.online.push(user);
    },
    REMOVE_ONLINE_USER(state, user) {
        state.online = state.online.filter(u => u.email != user.email)
    }
}