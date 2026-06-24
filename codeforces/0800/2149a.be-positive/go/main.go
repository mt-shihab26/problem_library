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
	var n int
	fmt.Scan(&n)
	zero_count := 0
	negative_count := 0
	for i := 0; i < n; i++ {
		var t int
		fmt.Scan(&t)
		switch t {
		case 0:
			zero_count++
		case -1:
			negative_count++
		}
	}
	r := zero_count
	r += ((negative_count % 2) * 2)
	fmt.Println(r)
}
