
import csv
from sklearn.linear_model import LinearRegression
import pickle
import requests
import io
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from sklearn.tree import DecisionTreeClassifier # Import Decision Tree Classifier
from sklearn.model_selection import train_test_split # Import train_test_split function
from sklearn import metrics #Import scikit-learn metrics module for accuracy calculation

tsgene=pd.read_csv("TSGENE.csv")
#split dataset in features and target variable
feature_cols = ['CNO', 'START', 'END']
df = tsgene['GENE_TYPE'] 
# create dummy variables
new=pd.get_dummies(df)
new
X = tsgene[feature_cols] # Features
y = new['miscRNA'] # Target variable
    
# Split dataset into training set and test set
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=1) # 80% training and 20% test
    
# Create Decision Tree classifer object
clf = DecisionTreeClassifier()

# Train Decision Tree Classifer
clf = clf.fit(X_train,y_train)

#Predict the response for test dataset
y_pred = clf.predict(X_test)
    
# Model Accuracy, how often is the classifier correct?
print("Accuracy:",metrics.accuracy_score(y_test, y_pred)*100)

print("!!Enter Values to determine Gene Type!!")
a=int(input("Enter Chromosome Number: "))
b=int(input("Enter Start Coordinate: "))
c=int(input("Enter End Coordinate: "))
q=clf.predict([[a,b,c]])
print(q)
if q==1:
    print('Gene Type is miscRNA!!')
else:
    print('Gene Type is protein-coding!!')


pickle.dump(clf, open('model1.pkl','wb'))

model = pickle.load(open('model1.pkl','rb'))
print(model.predict([[1,2,33]]))