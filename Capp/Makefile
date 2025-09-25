CC := gcc
CFLAGS := -O2 -Wall -Wextra -std=c11
LDFLAGS :=

all: main

main: main.o
	$(CC) $(CFLAGS) -o $@ $^ $(LDFLAGS)

main.o: main.c
	$(CC) $(CFLAGS) -c $< -o $@

clean:
	rm -f main main.o
.PHONY: all clean
