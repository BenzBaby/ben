1
echo "Enter 2 No:"
read x
read y

echo "$x+$y is"
expr $x + $y

echo "$x-$y is"
expr $x - $y

echo "$x/$y is"
expr $x / $y

echo "$x*$y is"
expr $x \* $y



1.2
echo "Enter Two numbers : "
read num1
read num2
echo "Enter Choice :"
echo "1. Addition"
echo "2. Subtraction"
echo "3. Multiplication"
echo "4. Division"
read ch
case $ch in
1) res=$(echo "$num1 + $num2" | bc);;
2) res=$(echo "$num1 - $num2" | bc);;
3) res=$(echo "$num1 * $num2" | bc);;
4) res=$(echo "$num1 / $num2" | bc);;
esac
echo "Result : $res"



2.Palindrome
echo "Enter the string"
read s
rvs=`echo $s | rev`
if [ $s = $rvs ]
then
echo " palindrome"
else
echo " not palindrome"
fi



3.Factorial
read -p "Enter the number: " n
fact=1
for ((i=1; i<=n; i++))
do
    fact=$((fact * i))
done
echo "Factorial of $n is $fact"



4.Sequence 
for i in {1..4}
do
    for j in $(seq 1 $i)
    do
        printf "$i "
    done
    printf "\n"
done


5.Cap to Small
tr A-Z a-z <./file1.txt



6.Armstrong 
read -p "Enter number: " num
x=$num
sum=0

while [ $x -gt 0 ]; do
    digit=$((x % 10))
    cube=$((digit * digit * digit))
    sum=$((sum + cube))
    x=$((x / 10))
done

if [ $sum -eq $num ]; then
    echo "Armstrong"
else
    echo "Not Armstrong"
fi



7.
echo "Enter the starting year: "
read syear
echo "End year:"
read eyear
for year in $(seq $syear 1 $eyear)
do
  if [ $(expr $year % 4) -eq 0 ]
  then
    echo $year
  fi
done
