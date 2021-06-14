import csv
import pandas as pd
from sklearn.linear_model import LinearRegression
import pickle
import requests
import io
import numpy as np
import matplotlib.pyplot as plt



# Reading the downloaded content and turning it into a pandas dataframe



df=pd.read_csv("COSMIC.csv")

dfc=df.copy()
dfc['CANCER']=dfc['CANCER'].map({'carcinoma':0,'haematopoietic_neoplasm':1,'glioma':2,'NS':3,'primitive_neuroectodermal_tumour-medulloblastoma':4,'lymphoid_neoplasm':5})
dfc['ORGAN']=dfc['ORGAN'].map({'pancreas':0,'large_intestine':1,'ovary':2,'lung':3,'breast':4,'endometrium':5,'haematopoietic_and_lymphoid_tissue':6,'kidney':7,'central_nervous_system':8,'urinary_tract':9,'liver':10,'cervix':11,'NS':12})
# take a look at the dataset
#df.head()
import pandas as pd
from sklearn.tree import DecisionTreeClassifier # Import Decision Tree Classifier
from sklearn.model_selection import train_test_split # Import train_test_split function
from sklearn import metrics #Import scikit-learn metrics module for accuracy calculation

#split dataset in features and target variable
feature_cols = ['ORGAN', 'START', 'END']
X = dfc[feature_cols] # Features
y = dfc['CANCER'] # Target variable
    
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

print("!!Enter Values to determine cancer type !!")
b=int(input("Enter Start Coordinate: "))
c=int(input("Enter End Coordinate: "))
print("\n\nFor pancreas enter 0\nFor large_intestine enter 1\nFor ovary enter 2\nFor breast enter 3\nFor endometrium enter 4\nFor haematopoietic_and_lymphoid_tissue enter 5")
print("For kidney enter 6\nFor central_nervous_system enter 7\nFor urinary_trac enter 8\nFor liver enter 9\nFor cervix enter 10\nFor NS enter 11")
a=int(input("Enter organ: "))
q=clf.predict([[a,b,c]])
print(q)
if q==0:
    print('Cancer Type is carcinoma!!')
elif q==1:
    print('Cancer Type is haematopoietic_neoplasm!!')
elif q==2:
    print('Cancer Type is glioma!!')
elif q==3:
    print('Cancer Type is NS!!')
elif q==4:
    print('Cancer Type is primitive_neuroectodermal_tumour-medulloblastoma!!')
elif q==5:
    print('Cancer Type is lymphoid_neoplasm!!')
else:
    print('Cancer Type is Unable to predict!!')
#use required features


# Saving model to disk
# Pickle serializes objects so they can be saved to a file, and loaded in a program again later on.
pickle.dump(clf, open('model.pkl','wb'))

model = pickle.load(open('model.pkl','rb'))
print(model.predict([[4,1,122]]))
