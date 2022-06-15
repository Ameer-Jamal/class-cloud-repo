import time

from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
import os

def isBrowserAlive():
   try:
      driver.current_url
      # or driver.title
      return True
   except:
      return False

def openUniFile():
    # os.startfile simply opens a file
    os.startfile("C:\\Users\\Main\\Desktop\\University")


def makeFile():
    try:  # make a file if not available
        f = open("userTestData.txt", "x")
        makeUsername = input("Enter your username: ")
        makePassword = input("Enter your password: ")
        # f = open("userData.txt", "a")
        f.write(makeUsername + "\n" + makePassword)
        f.close()
        print("file was made successfully")
    except:
        # if file already created return as this function is only
        # responsible for making a file if not available
        return


def readFile():
    try:
        # delegating responsibility and making sure file is made
        makeFile()
        f = open("userTestData.txt", "r")
        # Using readlines() to read each line in the file
        # and save it to the data list
        Lines = f.readlines()
        # Strips the newline character and makes
        # sure its clean text
        data = []
        for line in Lines:
            data.append(line.strip())
            f.close()
        print("file was read successfully")
        return data
    except:
        # if an error has occurred then reset the file
        print("error file reading encountered an issue a problem ")
        print("please try resetting the file")
        resetFile()


def resetFile():
    char = input("please type R to reset the username and password or 'x' to go back: ")
    if char == "r" or char == "R":
        os.remove("userTestData.txt")
        makeFile()
    elif char == 'x':
        return
    else:
        print("wrong character")
        resetFile()


def classCloudLogin(userName, passWord):
    try:
        # set URL
        url = "http://localhost:8080/class-cloud-repo/logInPage.php"
        # We are using global to make sure browser doesnt close
        global driver
        # gets the latest chrome driver
        driver = webdriver.Chrome(ChromeDriverManager().install())
        driver.maximize_window()
        driver.get(url)
        # entering key presses for username and password
        # and clicks on login and elearning button
        driver.find_element_by_id("email").send_keys(userName)
        driver.find_element_by_id("password").send_keys(passWord)
        driver.find_element_by_id("btn").click()
    except:
        # if error occurs in username and password then quit browser reset file and try again
        quitDriver()
        print("an error has occurred please try and reset your username and password")
        resetFile()
        classCloudLogin(readFile()[0], readFile()[1])


def quitDriver():
    driver.quit()


def reRunlogin():
    quitDriver()
    username = readFile()[0]
    password = readFile()[1]
    classCloudLogin(username, password)


print("\n\n====== Welcome to our testing Auto Login solution ======\n\n")
# start with making a file for first time use or if file gets deleted
makeFile()

# setting the username to the first line in the text file userTestData.txt
# and the password to the second line
# NOTE if the file contains other lines it will ALWAYS TAKE the first two
username = readFile()[0]
password = readFile()[1]

# ****opens my university file****
# openUniFile()


# calls the login function which opens the browser
# and auto logins depends on the data
classCloudLogin(username, password)

# ask user at the end if they would want to reset username and password or exit browser
# if the input is not x it will allow you to reset information and if wanted rerun browser
# else it will break the loop and exit and close driver
choice = "null"

while isBrowserAlive():
    print("\n\n if you would like to reset login information type 'yes' \nTo exit browser please type 'x' ")

    choice = input()

    if choice == "yes" or choice == "Yes" or choice == "YES" or choice == 'y' or choice == 'Y':
        resetFile()
        choice = input("if you would like to rerun browser type 'yes' if not type 'no : ")
        if choice == "yes" or choice == "Yes" or choice == "YES" or choice == 'y' or choice == 'Y':
            reRunlogin()
        if choice == 'no':
            continue
    elif choice == 'x' or choice == 'X' or choice == "exit" or choice == 'EXIT' or choice == 'Exit':
        break


quitDriver()

# these are the tags on the website i found using inspect that helped in building this project
# tbUsername tbPsw btnLogin
