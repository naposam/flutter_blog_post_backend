     showDialog(context: context,
            builder: (context) =>
                AlertDialog(
                  title: Text("Message"),
                  content: Text("Post Added Successfully"),
                  actions: [
                    ElevatedButton(
                        style: ElevatedButton.styleFrom(
                          primary: Colors.red,
                        ),
                        onPressed: () {
                         
                        },
                        child: Text("Ok")),
                  ],
                ));