#include <vector>


#define ONBOARD_LED  2

#define BTN1 32
#define PUMP1IN 25
#define PUMP1OUT 33


#define BTN2 13
#define PUMP2IN 27
#define PUMP2OUT 26

int lastState1 = LOW;
int lastState2 = LOW;

int currentState1;
int currentState2;
std::vector< int > arr;

void setup() {
  Serial.begin(9600);
  pinMode(BTN1, INPUT_PULLUP);
  pinMode(PUMP1IN, OUTPUT);
  pinMode(PUMP1OUT, OUTPUT);

  pinMode(BTN2, INPUT_PULLUP);
  pinMode(PUMP2IN, OUTPUT);
  pinMode(PUMP2OUT, OUTPUT);
  
  
  Serial.println("Setup DONE...");

}

void loop() {
  //first pump
  currentState1 = digitalRead(BTN1);
  if (currentState1 == LOW){
    Serial.println("");
    digitalWrite(PUMP1OUT, HIGH);
    digitalWrite(PUMP1IN, LOW);
  }
  else if (lastState1 == LOW && currentState1 == HIGH || currentState1 == HIGH){
    Serial.println("");
    digitalWrite(PUMP1OUT, LOW);
    digitalWrite(PUMP1IN, LOW);
    }
  lastState1 = currentState1;


   //second pump
   currentState2 = digitalRead(BTN2);
   if (currentState2 == LOW){
    Serial.println("The button 2 is pressed");
    digitalWrite(PUMP2OUT, HIGH);
    digitalWrite(PUMP2IN, LOW);
  }
    
  else if (lastState2 = LOW && currentState2 == HIGH || currentState2 == HIGH){
    Serial.println("The button 2 was released");
    digitalWrite(PUMP2OUT, LOW);
    digitalWrite(PUMP2IN, LOW);
    }  
    lastState2 = currentState2;
}
