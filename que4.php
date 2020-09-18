 
#include <bits/stdc++.h> 
using namespace std; 

void printPairs(int arr[], int n) 
{ 
	bool pair_exists = false; 
 
	sort(arr, arr + n); 

	 
	for (int i = 0; i < n; i++) { 

		 
		if (arr[i] < 0) { 

			 
			if (binary_search(arr, arr + n, -arr[i])) { 
				cout << arr[i] << ", " << -arr[i] << endl; 

				pair_exists = true; 
			} 
		} 

		else
			break; 
	} 

	if (pair_exists == false) 
		cout << "No such pair exists"; 
} 

 
int main() 
{ 
	int arr[] = { 4, 8, 9, -4, 1, -1, -8, -9 }; 
	int n = sizeof(arr) / sizeof(arr[0]); 

	printPairs(arr, n); 

	return 0; 
} 
