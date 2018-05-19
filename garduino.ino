#include <DHT_U.h>
#include <DHT.h>
#include <Time.h>

// Definimos el pin digital donde se conecta el sensor
#define DHTPIN 7
// Dependiendo del tipo de sensor
#define DHTTYPE DHT11

// Inicializamos el sensor DHT11
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(9600);
  // Comenzamos el sensor DHT
  dht.begin();
  // Iniciamos el servo para que empiece a trabajar con el pin 9
  pinMode(13,OUTPUT);
}

void loop() {
  delay(1000);

  // Leemos la humedad relativa
  float h = dht.readHumidity();
  // Leemos la temperatura en grados centígrados (por defecto)
  int t = dht.readTemperature();
  // Comprobamos si ha habido algún error en la lectura
  if (isnan(h) || isnan(t)) {
    Serial.println("Error obteniendo los datos del sensor DHT11");
    return;
  }
  // Imprimir informacion
  Serial.print("Humedad Ambiente: ");
  Serial.print(h);
  Serial.print(" %\t");
  Serial.print("Temperatura Ambiente: ");
  Serial.print(t);
  Serial.print(" °C\t ");
  Serial.print("Hora: ");
  Serial.print(hour());
  Serial.print(":");
  Serial.print(minute());
  Serial.print(":");
  Serial.println(second());
  if(t>=24){
    digitalWrite(13 , HIGH);
    }else{
      digitalWrite(13 , LOW);
      }

}
