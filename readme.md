# Interactive Maps and Places Application

This Project utilizes Laravel framework 5.4, which communicates with Google Distance Matrix API, Google Places API and Google Maps and Embed API to allow users to get data between two geographical locations such as distance, time, and traffic data.

Simply clone the repo run 'composer update', then 'php artisan serve', and the project will be up and running on your server.

Enter the start and end locations, and click fetch data, you will get the distance between the two points, as well as the time needed. The Google maps will show you the directions.

# Next Steps

1. This project could be further improved to provide realtime traffic data, and show it in maps so that the user can be suggested with alternative routes.
2. We can also give extra information such as Elevation points, and different travel modes (driving, walking, taxi, etc...).
3. Currently this only supports TO and FROM locations, we can update this application by adding several stops, so that the API can calculate the optimum route.
4. We can enable user logins, and save search history to a database, so that the user can review history. Furthermore, on search history entry click we can retreive data, so that the user doesnt have to always enter TO and FROM.

# Key Concerns

The source code contains user specific Google console generated API keys that is been exposed currently.