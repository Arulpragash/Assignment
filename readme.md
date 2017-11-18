# Assignment

This Project utilizes Laravel framework 5.4, which communicates with Google Distance Matrix API, and Maps API to allow users to get data between two geographical locations such as distance, time, and traffic data.

Simply run 'Php artisan serve', and the project will be up and running on your server.

# Next Steps

This project could be further improved to provide realtime traffic data, and show it in maps so that the user can be suggested with alternative routes.
We can also give extra information such as Elevation points, and suggestions for alternative routes.
Currently this only supports TO and FROM locations, we can update this application by adding several stops, so that the API can calculate the optimum route.
We can enable user logins, and save search history to a database, so that the user can review history. Furthermore, on search history entry click we can retreive data, so that the user doesnt have to always enter TO and FROM.

# Key Concerns

The source code contains user generated API key that is been exposed currently.
