# Developer Test from LeapFroggr

Please send your answers to [admin@leapfroggr.com](mailto:admin@leapfroggr.com).

1. In a hypothetical language, if

```
7– 5 + 2 * 1 = 2
3– 0 + 4 * 2 = 4
9– 2 + 1 * 5 = 1
2– 6 + 3 * 4 = 4
1– 3 + 2 * 5 = 5
4– 6 + 4 * 9 = 9
What is 5 – 2 + 7 * 0 = ?
```

a.) 8 
b.) 7
c.) 2 
d.) 0 

Notes: 

`7 – 5 + (2 * 1) = 2` => `2 + 2 = 2` Answer should be 4
`3 – 0 + (4 * 2) = 4` => `3 + 8 = 4` Answer should be 11
`9 – 2 + (1 * 5) = 1` => `7 + 5 = 1` Answer should be 12
`2 – 6 + (3 * 4) = 4` => `-4 + 12 = 4` Answer should be 8
`1 – 3 + (2 * 5) = 5` => `-2 + 10 = 5` Answer should be 8
`4 – 6 + (4 * 9) = 9` => `-2 + 36 = 9` Answer should be 34
`5 – 2 + (7 * 0) = ?` => `3 + 0 = ?` Answer should be 3

Answer: d. 0 (wild guess)

2. In a hypothetical language, which among the choices is a POSSIBLE output of the code below:

```
var x = 0

function getData() {
    x = x + 1
    return x
}

if ( getData() > 0 || getData() < 10) {
    print(x)
}
```

a.) No output 
b.) 0
c.) 2 
d.) None of the above

Answer: d.) None of the above, it should print 1 when getData is invoked x = 1, output should be 1


3. Given the data below, which expression filters the list using standard SQL where clause to show 5 year old girls with a cold
or a headache?

```
Name            Age Gender  Condition
Jose Lapilez    10  M       Cold
Maria Tengson   5   F       Headache
Joanne Benitez  4   F       Cold
Teresa Hilahil  3   F       None
```

a.) Age = 5 and Gender = Girl and Condition = ‘Cold’ or Condition =’Headache’
b.) Age = 5 and Gender = Girl or Condition = ‘Cold’ and Condition =’Headache’
c.) Age = 5 and Gender = Girl and Condition = ‘Cold’ andCondition =’Headache’
d.) None of the above

Answer d. None of the above, query should be WHERE Age = 5 AND Gender = 'F' AND (Condition = 'Cold' OR Condition = 'Headache')


4. Given the data below, which expression best describes the data below?

Name            Age     Gender  Condition
Jose Lapilez    7       M       Cold
Maria Tengson   8       F       Headache
Ramon Nestor    3       M       Runny Nose
Teresa Hilahil  5       F       None

a.) Age <= 7 and Gender <> ‘F’ 
b.) Age <= 7 and Condition <> ‘N/A’
c.) Age >= 3 and Gender <> ‘M’ 
d.) Age >= 3 or Condition <> ‘N/A’

Answer: d. Age >= 3 or Condition <> ‘N/A’

5. The two pseudo codes below attempts to find the index of a number (n) from a very large sorted list/array (L) in ascending
order. Which of the following statement is true?

Code 1:
```
function find(n,L,start,end) {
    var i = start
    while(i<=end) {
        if (n == L[i]) {
            return i
        }
        i = i + 1
    }
    return -1
}
```

Code 2:
```
function find(n,L,start,end) {
    var length = end-start
    var i = start + length/2
    if (start>end) {
        return -1
    } else if (start==end) {
        if (n==L[i]) {
            return i
        } else {
            return -1
        }
    } else if (n == L[i]){
        return i
    } else if (n > L[i]) {
        return find(n,L,i+1,end)
    } else {
        return find(n,L,start,i-1)
    }
}
```

a.) Code 1 is correct and runs faster than Code 2 
b.) Code 1 is incorrect
c.) Code2 is correct and runs faster than Code 1 
d.) Code2 is incorrect

Answer: c. Code2 is correct and runs faster than Code 1 

Code 2 uses recursion and quick sort to find n in L


6. What is the output of the pseudo code below?

```
var i = 0
while(i < 10) {
    i = i + 1
    if ( i % 2 == 0) {
        print (i + 1)
    }
}
```

Output:
3
5
7
9
11


7. What is the output of the pseudo code below?

```
var i = 0
while(i < 10) {
    i = i + 1
    print (i)
    if (2 * i == i + i) {
        break;
    }
}
```

Output:
1


8. What is the output of the pseudo code below?

```
x = 1000
while(x > 0) {
    print(x % 10)
    x = Math.floor(x/10)
}
```

Output:
0
0
0
1


9. What is the output of the pseudo code below assuming that the charAt function is zero-based?

```
var s = "HelloWorld!!!=)"
var i = 0
while(i + 1< s.length()) {
    if (s.charAt(i) <> s.charAt(i+1)) {
        print(s.charAt(i))
    }
    i=i+1
}
```

Output:

```
H
e
l
o
W
o
r
l
d
!
=
```

10. What is the output of the pseudo code below?

```
var n = 5
for i = 1 to n {
    for j = 1 to n-i {
        print(“”)
    }

    for k = 1 to i {
        print(“X”)
    }
    print(“\n”)
}
```

Output:

```
 





X


X
X

X
X
X


```
