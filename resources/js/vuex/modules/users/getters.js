export default {
    sortedUsers(state) {
        let users = state.items.data
        const onlineUsers = state.online
        users = users.sort(user => onlineUsers.findIndex(u => u.email === user.email) === -1 ? 1 : -1)
        users = users.map(user => {
            const index = onlineUsers.findIndex(u => u.email === user.email)
            user.online = index != -1;
            return user;
        })
        return users;
    }
}