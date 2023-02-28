import random
emotion=["Happy","SAD","Hungry"]
class pet:
    def __init__(self,name):
        self.name=name
        self.hunger=0
        self.play=0

    def show(self):

        print("Pet name :",self.name)
    def dog(self,action):
        if(action==2):
            print("BARK BARK")
            print("Dog is feeling happy")
        if (action == 1):
            if(self.hunger<100):
                self.hunger = self.hunger + 25
                print("Dog",o.name,"has been fed successfully")
            else:
                print(o.name,"is not feeling hungry")
        if (action==3) :
            if(self.play<100):
                self.play = self.play + 30
                print("Dog",o.name,"is playing")
            else:
                print(o.name,"is feeling tired")
        elif(action==4):
            print("Exited")
            exit()
    def cat(self,action):
        if(action==2):
            print("MEOW MEOW")
            print("Cat is feeling happy")
        if (action == 1):
            if(self.hunger<100):
                self.hunger = self.hunger + 25
                print("cat",o.name,"has been fed successfully")

            else:
                print(o.name,"is not feeling hungry")
        if (action==3) :
            if(self.play<100):
                self.play = self.play + 25
                print("Cat",o.name,"is playing")
            else:
                print(o.name,"is feeling tired")
        elif (action == 4):
            print("Exited")
            exit()
    def rabbit(self,action):
        if(action==2):
            print("GROWL")
            print("RABBIT is feeling happy")
        if (action == 1):
            if(self.hunger<100):
                self.hunger = self.hunger + 25
                print("rabbit",o.name,"has been fed successfully")

            else:
                print(o.name,"is not feeling hungry")
        if (action==3) :
            if(self.play<100):
                self.play = self.play + 30
                print("rabbit",o.name,"is playing")
            else:
                print(o.name,"is feeling tired")
        elif (action == 4):
            print("Exited")
            exit()
print("Select type of pet")
print("1.DOG\n2.CAT\n3.RABBIT")
x=int(input("Enter your choice"))
if(x==1):
    name=input("Enter the name of your pet DOG")
    o=pet(name)
    while(True):
        print("1.Feed\n2.Pet\n3.Play\n4.Exit")
        action = int(input("Enter your choice"))
        o.dog(action)
elif(x==2):
    name=input("Enter the name of your pet CAT")
    o = pet(name)
    while (True):
        print("1.Feed\n2.Pet\n3.Play\n4.Exit")
        action = int(input("Enter your choice"))
        o.cat(action)
elif(x==3):
    name=input("Enter the name of your pet RABBIT")
    o = pet(name)
    while (True):
        print("1.Feed\n2.Pet\n3.Play\n4.Exit")
        action = int(input("Enter your choice"))
        o.rabbit(action)
else:
    print("Enter a valid input")