In the front end i have used html,css,bootstrap and in backend php is used to fetch data from database and to perform other operations.
The major part of the project that acts here as the backbone is Flask which is used here to attach the machine learning algorithm to the front end.Before i proceed i need to make you little familiar with flask. so Flask is a popular Python web framework, meaning it is a third-party Python library used for developing web applications.It has no database abstraction layer, form validation, or any other components where pre-existing third-party libraries provide common functions. However, Flask supports extensions that can add application features as if they were implemented in Flask itself.

The main pecularity of our project is that anyone who dont even know anything about machine learning can use it from the web interface.
In creation of this web application one module that plays an important role is pikle.
Pickle : Python pickle module is used for serializing and de-serializing python object structures. The process to convert any kind of python object (list, dict, etc.) into byte streams (0s and 1s) is called pickling. We can converts the byte stream back into python objects by a process called as unpickling.

At first we write the machine learning algorithm in a .py file and then picke module will save our ML model as “model.pkl”. We will later use this file to predict the output when new input data is provided from our web-app.After installing flask in our local system We will initialize our app and then load the “model.pkl” file to the app.Also define the app route for the default page of the web-app. We create a new app route (‘/predict’) that reads the input from our ‘index.html’ form and on clicking the predict button the code written inside the def predict() will get executed , outputs the result using render_template. 

since we already understood how eveything is working in the backend lets see the web pages of our project.As you can see there are three buttons to perform three different operations Analysis,Searching and prediction.When we click on analysis we will be redirected to a new page where it will show the detailed statistics of data.Here the x axis is representing the organ affected and the y axis is representig the frequency.Based on this we can have an idea that which organ is need to be taken care of.Also we can see the numerous types of cancer that are discovered so far and affecting human bodies.

Moving on to next slide of prediction where user will be asked to select an organ from the dropdown list and enter the start and end coordinate to find out  the type of cancer.when we click on the Predict button The result will shown to user .

We have also given a form to know the gene type using chromosome number ,start and end coordinate.The same thing will happen here also ,the user will get to know their gene type by clicking on the below button

Since the target variable which we need to predict here was categorical So we applied classification algorithms that is Decision tree and Logistic regression As you can see the calculated accuracy of DT is higher so we implemented that  in the final model. Because higher the accuracy ,More precise will be the result

Step 1:Create a folder in wamp66/www  and paste the three files that are inside localhost there.Because the searching part is done from database using phpmyadmin in loclhost,So before running the project you need to run the localhost engine also.

Step 2:Go to the directry in command promt where you have kept all the project files downloaded from here.

Step 3:Install flask in your local maching using the suitable command(You can take help from google)

Step 4:Run the app.py file using python app.py command.Wait for few seconds and you will get a localhost address there.

Step 5:Copy that address and paste into ypur default browsers URL and run it.
