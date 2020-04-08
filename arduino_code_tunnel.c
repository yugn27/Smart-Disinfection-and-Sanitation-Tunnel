/*
 * Smart Disinfection and Sanitation Tunnel
 */
 
int relayPin = 12;                // choose the pin for the Relay Pin

int inputPin = 2;               // choose the input pin (for PIR sensor)
int inputPin2 = 3;               // choose the input pin (for PIR sensor 02)

int pirState = LOW;             // we start, assuming no motion detected
int val = 0;                    // variable for reading the pin status
int val2 = 0;                    // variable for reading the pin status

 
void setup() {
  pinMode(relayPin, OUTPUT);      // declare LED as output
  pinMode(inputPin, INPUT);     // declare sensor as input
  pinMode(inputPin2, INPUT);  
  Serial.begin(9600);
}
 
void loop(){
  val = digitalRead(inputPin);  // read input value
  val2 = digitalRead(inputPin2);  // read input value
  if (val == HIGH || val2 == HIGH) {            // check if the input is HIGH
    digitalWrite(relayPin, HIGH);  // turn LED ON
    if (pirState == LOW) {
      // we have just turned on
      Serial.println("Motion detected!");
      // 15 sec delay
      delay(15000);
      // We only want to print on the output change, not state
      pirState = HIGH;
    }
  } else {
    digitalWrite(relayPin, 0); // turn LED OFF
    if (pirState == HIGH){
      // we have just turned of
      Serial.println("Motion ended!");
      // We only want to print on the output change, not state
      pirState = LOW;
    }
  }
  
}
