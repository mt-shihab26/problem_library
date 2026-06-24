package main

import "fmt"

func main() {
	var t int
	fmt.Scan(&t)
	for t != 0 {
		testCase()
		t--
	}
}

func testCase() {
	fmt.Println("Hello World")
}
