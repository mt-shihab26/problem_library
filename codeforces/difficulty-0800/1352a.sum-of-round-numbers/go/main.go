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
	var a []int
	x := 10
	for n != 0 {
		r := n % x
		if r != 0 {
			a = append(a, r)
		}
		n -= r
		x *= 10
	}
	fmt.Printf("%d\n", len(a))
	for _, i := range a {
		fmt.Printf("%d ", i)
	}
	fmt.Println()
}
